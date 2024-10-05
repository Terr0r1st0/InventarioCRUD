<div class="mb-8"> <!-- Adding margin to separate tables -->
    <h2 class="text-lg font-semibold mb-4">Informe de Ventas</h2>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="w-full bg-gray-200">
                <th class="py-2 px-2 border-b text-left">ID</th>
                <th class="py-2 px-2 border-b text-left">Cliente</th>
                <th class="py-2 px-2 border-b text-left">Producto</th>
                <th class="py-2 px-2 border-b text-left">Cantidad</th>
                <th class="py-2 px-2 border-b text-left">Precio de Venta</th>
                <th class="py-2 px-2 border-b text-left">Total</th>
                <th class="py-2 px-2 border-b text-left">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->getTableRecords() as $venta)
                <tr>
                    <td class="py-2 px-2 border-b">{{ $venta->id }}</td>
                    <td class="py-2 px-2 border-b">{{ $venta->cliente->name }}</td>
                    <td class="py-2 px-2 border-b">{{ $venta->producto->nombre }}</td>
                    <td class="py-2 px-2 border-b">{{ $venta->cantidad }}</td>
                    <td class="py-2 px-2 border-b">{{ number_format($venta->precio_venta, 2) }} $</td>
                    <td class="py-2 px-2 border-b">{{ number_format($venta->cantidad * $venta->precio_venta, 2) }} $</td>
                    <td class="py-2 px-2 border-b">{{ $venta->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        <p class="font-semibold">Total de Ventas: {{ number_format($this->getTotalVentas(), 2) }} $</p>
    </div>
</div>

