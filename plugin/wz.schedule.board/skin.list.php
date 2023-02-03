<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<!-- 밑에 add_stylesheet 함수를 사용하지 않는이유은 가끔 홈페이지 개발시 오류로 add_stylesheet 함수가 먹지 않는 현상으로 인해 사용하지 않습니다. -->
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/core/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/daygrid/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/timegrid/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/list/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/css/magnific-popup.css?v=191122" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/css/style.css?v=191122" rel="stylesheet" />

<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/core/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/interaction/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/daygrid/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/timegrid/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/list/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/core/locales-all.min.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/js/common.js?v=191002"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/js/jquery.magnific-popup.min.js"></script>

<?php
if (!$wscb['wrc_display_types']) {
    $wrc_display_types = 'dayGridMonth,dayGridWeek,dayGridDay';
}
else {
    $arr_display_types = unserialize($wscb['wrc_display_types']);
    if (is_array($arr_display_types)) {
        $wrc_display_types = implode(',', $arr_display_types);
    }
    else {
        $wrc_display_types = $arr_display_types;
    }
}

$wrc_lang = $wscb['wrc_lang'] ? $wscb['wrc_lang'] : 'ko';
?>

<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function() {
    var initialLocaleCode = "<?php echo $wscb['wrc_lang']?>";
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ "dayGrid", "timeGrid", "list", "interaction" ],
        height: 'parent',
        header: {
            left: "prev,next today",
            center: "title",
            right: "<?php echo $wrc_display_types?>"
        },
        defaultDate: "<?php echo G5_TIME_YMD?>",
        defaultView: "<?php echo ($wscb['wrc_default_view'] ? $wscb['wrc_default_view'] : 'dayGridMonth')?>",
        locale: initialLocaleCode,
        navLinks: true, // can click day/week names to navigate views
        editable: false,
        weekNumbers: <?php echo ($wscb['wrc_weeks_number'] ? 'true' : 'false')?>,
        eventLimit: false, // allow "more" link when too many events
        timeZone: 'UTC',
        events: {
            url: "<?php echo WCAL_PLUGIN_URL;?>/get-events.php?bo_table=schedule&sca=<?php echo urlencode($sca)?>",
            error: function() {
                $("#script-warning").show();
            }
        },
        eventClick: function(info) {
            console.log(info.event);
            var titleHtml = '<h5><a href="'+info.event.url+'">'+info.event.title+'</a></h5>';
            var startTime = new Date(info.event.start).toISOString();
            var startDateString = startTime.replace('T',' ').substring(0,10);
            var startTimeString = startTime.replace('T',' ').substring(11,16);
            if(info.event.end!=null) {  //종료시각이 지정된 경우(당일 종일이 아닌 경우)
                var endTime = new Date(info.event.end).toISOString();
                var endDateString = endTime.replace('T',' ').substring(0,10);
                var endTimeString = endTime.replace('T',' ').substring(11,16);
                if(startDateString==endDateString) { //종료시각은 있으나 시작일과 동일한 경우
                    endDateString = '';
                }
            } else { //종료일이 없는 경우 (당일 종일인 경우)
                var endTime = '';
                var endDateString = '';
                allday = false;
            }
            var titleSchedule = '';
            var titleCont = '<p>'+info.event._def.extendedProps.cont.replaceAll('\r\n','<br>')+'</p>';

            if(endDateString!=''){
                titleSchedule = '<p>📆 '+startDateString+' '+startTimeString+' ~ '+endDateString+' '+endTimeString+'</p>';
            } else {
                titleSchedule = '<p>📆 '+startDateString+'</p>';
                if(!info.event.allDay) {
                    if(!info.event.end) {
                        titleSchedule += '<p>⏱ '+startTimeString+'~'+'</p>';
                    } else {
                        titleSchedule += '<p>⏱ '+startTimeString+'~'+endTimeString+'</p>';
                    }
                } else {
                    titleSchedule += '<p>⏱ 하루종일</p>';
                }
            }


            $("#tool-popup-title").html(titleHtml);
            $("#tool-popup-schedule").html(titleSchedule);
            $("#tool-popup-cont").html(titleCont);
            if (info.event.url.indexOf(document.location.hostname) === -1) {
                window.open(info.event.url, '_blank');
                info.jsEvent.preventDefault(); // don't let the browser navigate
            }
        },
        loading: function(bool) {
            $("#loading").toggle(bool);
        }
    });
    calendar.render();

    if (g5_is_admin) {
        $("#calendar .fc-toolbar .fc-right").append('<div class="fc-button-group"><button type="button" class="fc-button fc-button-primary" id="btn-settings">설정</button></div>');
    }

});
jQuery(document).ready(function () {
    $(document).on('click', '#btn-settings', function() {
        $.magnificPopup.open({
            items: {
                src: '<?php echo WCAL_PLUGIN_URL?>/setting.php?bo_table=schedule'
            },
            type: 'iframe'
        });
    });

    $("#tool-popup-cancel").on('click',function () {
        $("#tool-popup").css({"display":'none'});
    });
    $(document).on('click', '.fc-event-container .fc-h-event', function(e) {
        e.preventDefault();
        //console.log(e);
        var href = $(this).attr('href');
        var pageX = $(window).width();
        var pageY = $(window).height();
        var divTop = e.pageY/4;
        var divLeft = e.pageX/3;
        console.log("window크기",pageX);
        console.log("클릭위치",divLeft);
        if(pageX>=992) {
            if(divLeft+280>pageX) {
                divLeft = pageX-580;
            } else {
                
            }
        } else {
            if(divLeft+280>pageX) {
                divLeft = pageX-400;
            } else {
                
            }
        }
        $("#tool-popup").css({"display":'block', "position":"absolute","top": divTop, "left": divLeft, "z-index":"10000"});
        // $.magnificPopup.open({
        //     items: {
        //         src: href
        //     },
        //     type: 'iframe'
        // });
    });

});

//-->
</script>
<div id="tool-popup" style="display:none; padding:20px; width:280px; height:300px; background-color:#fff; border: 1px solid #aaa; border-radius: 2px;">
    <button id="tool-popup-cancel" type="button" class="fc-button fc-timeGridWeek-button" style="position: absolute;right: 5px;top: 5px">x</button>
    <div id="tool-popup-title">

    </div>
    <div id="tool-popup-schedule" style="font-size: 0.8rem;">

    </div>
    <div id="tool-popup-cont" style="font-size: 0.8rem;">

    </div>
</div>
<div id="calendar" style="width:80%; margin:0 auto;"></div>