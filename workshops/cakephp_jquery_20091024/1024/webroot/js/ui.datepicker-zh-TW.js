jQuery(function($){
    $.datepicker.regional['zh-TW'] = {
        closeText: '關閉',
        prevText: '<上月',
        nextText: '下月>',
        currentText: '今天',
        monthNames: ['一月','二月','三月','四月','五月','六月',
        '七月','八月','九月','十月','十一月','十二月'],
        monthNamesShort: ['一','二','三','四','五','六',
        '七','八','九','十','十一','十二'],
        dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
        dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],
        dayNamesMin: ['日','一','二','三','四','五','六'],
        dateFormat: 'yy-mm-dd', firstDay: 1,
        showMonthAfterYear: false,
        changeMonth: true,
        changeYear: true,
        isRTL: false
    };
    $.datepicker.setDefaults($.datepicker.regional['zh-TW']);
    $.datepicker._phoenixGenerateMonthYearHeader = $.datepicker._generateMonthYearHeader;
    $.datepicker._generateMonthYearHeader = function(inst, drawMonth, drawYear, minDate, maxDate,
            selectedDate, secondary, monthNames, monthNamesShort
    ) {
        var result = $($.datepicker._phoenixGenerateMonthYearHeader(
                inst, drawMonth, drawYear, minDate, maxDate,
                selectedDate, secondary, monthNames, monthNamesShort));
        result.children("select.ui-datepicker-year").children().each(function() {
            $(this).text('民國' + ($(this).text() - 1911) + '年');
        });
        return result.parent().html();
    };
});