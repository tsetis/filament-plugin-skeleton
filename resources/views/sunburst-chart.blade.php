<x-filament-widgets::widget>
    <x-filament::section>
    <div
        x-ignore
        ax-load
        ax-load-src="{{\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('sunburst-js-script', 'tsetis/sunburst-chart')}}"
        x-data="SunburstObject(@js($data))"

        ax-load-css="{{\Filament\Support\Facades\FilamentAsset::getStyleHref('sunburst-css-script', 'tsetis/sunburst-chart')}}"
        >
        <div
            id="myChart"></di>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
