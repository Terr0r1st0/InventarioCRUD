<div class="mb-8"> <!-- Adding margin to separate tables -->
    <h2 class="text-lg font-semibold mb-4">Informe de Compras</h2>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="w-full bg-gray-200">
                <th class="py-2 px-4 border-b text-left">ID</th>
                <th class="py-2 px-4 border-b text-left">Proveedor</th>
                <th class="py-2 px-4 border-b text-left">Producto</th>
                <th class="py-2 px-4 border-b text-left">Cantidad</th>
                <th class="py-2 px-4 border-b text-left">Precio de Compra</th>
                <th class="py-2 px-4 border-b text-left">Total</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($this->getTableRecords() as $compra)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $compra->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $compra->proveedor->nombre }}</td>
                    <td class="py-2 px-4 border-b">{{ $compra->producto->nombre }}</td>
                    <td class="py-2 px-4 border-b">{{ $compra->cantidad }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($compra->precio_compra, 2) }} $</td>
                    <td class="py-2 px-4 border-b">{{ number_format($compra->cantidad * $compra->precio_compra, 2) }} $</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        <p class="font-semibold">Total de Compras: {{ number_format($this->getTotalCompras(), 2) }} $</p>
    </div>
</div>
