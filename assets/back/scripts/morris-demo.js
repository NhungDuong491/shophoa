
//morris area chart

$(function () {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2017 Q1',
            event: 2666,
            love: null,
            condolatory: 2647
        }, {
            period: '2017 Q2',
            event: 2778,
            love: 2294,
            condolatory: 2441
        }, {
            period: '2017 Q3',
            event: 4912,
            love: 1969,
            condolatory: 2501
        }, {
            period: '2017 Q4',
            event: 3767,
            love: 3597,
            condolatory: 5689
        }, {
            period: '2018 Q1',
            event: 6810,
            love: 1914,
            condolatory: 2293
        }, {
            period: '2018 Q2',
            event: 5670,
            love: 4293,
            condolatory: 1881
        }, {
            period: '2018 Q3',
            event: 4820,
            love: 3795,
            condolatory: 1588
        }, {
            period: '2018 Q4',
            event: 15073,
            love: 5967,
            condolatory: 5175
        }, {
            period: '2019 Q1',
            event: 10687,
            love: 4460,
            condolatory: 2028
        }, {
            period: '2019 Q2',
            event: 8432,
            love: 5713,
            condolatory: 1791
        }],
        xkey: 'period',
        ykeys: ['event', 'love', 'condolatory'],
        labels: ['event', 'love', 'condolatory'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
    //morris donut chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });
    //morris bar chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2013',
            a: 100,
            b: 90
        }, {
            y: '2014',
            a: 75,
            b: 65
        }, {
            y: '2015',
            a: 50,
            b: 40
        }, {
            y: '2016',
            a: 75,
            b: 65
        }, {
            y: '2017',
            a: 50,
            b: 40
        }, {
            y: '2018',
            a: 75,
            b: 65
        }, {
            y: '2019',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });
    //morris line chart
    Morris.Line({
        element: 'morris-line-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
