<x-filament::page>
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Grafik Buku Baru per Tahun Terbit</h2>

        <div id="chart"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const data = @json($this->getData());

            const years = data.map(item => item.tahun_terbit);
            const totals = data.map(item => item.total);

            const options = {
                chart: {
                    type: 'bar',
                    height: 400,
                },
                series: [{
                    name: 'Jumlah Buku',
                    data: totals
                }],
                xaxis: {
                    categories: years
                },
                colors: ['#3b82f6'],
                title: {
                    text: 'Jumlah Buku Baru per Tahun',
                    align: 'center'
                }
            };

            const chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
</x-filament::page>
