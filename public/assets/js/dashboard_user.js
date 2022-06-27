google.charts.load("current", { packages: ["calendar"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart(data){
    console.log(data)
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'date', id: 'Date' });
    dataTable.addColumn({ type: 'number', id: 'Laporan' });
    dataTable.addRows([
        // Many rows omitted for brevity.
    ]);

    var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

    var options = {
        title: "Aktivitas",
        height: 150,
        calendar: {
            // cell sizing
            cellSize: 10,
            focusedCellColor: {
                stroke: '#00ff00',
                strokeOpacity: 1,
                strokeWidth: 1,
            },
            monthLabel: {
                fontName: 'Jost',
                fontSize: 12,
                color: '#135388',
                bold: true,
                italic: true
            },
            monthOutlineColor: {
                stroke: '#3cd9d6',
                strokeOpacity: 0.8,
                strokeWidth: 2
            },
            unusedMonthOutlineColor: {
                stroke: '#fff',
                strokeOpacity: 0.8,
                strokeWidth: 1
            },
            yearLabel: {
                fontName: 'Jost',
                fontSize: 32,
                color: '#3cd9d6',
                bold: true,
                italic: true
            },
            // color of the month name
            dayOfWeekLabel: {
                fontName: 'Jost',
                fontSize: 8,
                color: '#1a8763',
                bold: true,
                italic: true,
            },
        },
        // mengubah tema background dan warna box
        // noDataPattern: {
        //     backgroundColor: '#76a7fa',
        //     color: '#fff'
        // }
    };

    chart.draw(dataTable, options);
}
document.addEventListener('DOMContentLoaded', function() {
    // initial API untuk events
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
    };
    fetch("https://kodein.online/ApiHistory", requestOptions)
        .then(response => response.json())
        .then(result =>{
            let data = [];
            if(!result){
                return data = [];
            }
            result.map(datas=>{
                data.push(
                    {
                        title:datas.nama_materi,
                        start:datas.tgl_mulai,
                        end:datas.tgl_selesai,
                        color:"green",
                    }
                )
            })
            drawChart(data);
        })
        .catch(error => console.log('error', error));
});