<div>
    <div class="flex justify-between align-center mb-12">
        <h1 class="text-3xl text-[#2E4399] font-sans font-bold ">Despesas Fixas</h1>
        <button class="bg-[#2E4399] p-1 rounded-lg cursor-pointer hover:hover:scale-103 transition duration-200">
            <img src="{{ asset('img/historical.png')}}">
        </button>
    </div>
    <div class="flex mb-4 justify-end">
        <button class="bg-[#2E4399] p-1 rounded-lg text-white cursor-pointer text-base hover:scale-103 transition duration-200">
            Nova Despesa
        </button>
    </div>
    <div class="bg-white w-full min-h-[300px] rounded p-6">
       
        <table class="w-full table-fixed justify-start">
            <thead>
                <tr class="font-sans text-[#0054B3] text-xl">
                    <th>Despesa</th>
                    <th>Valor</th>
                    <th>Vencimento</th>
                    <th>Ações</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="font-sans text-base text-black">
                    <td class="text-center py-6">Aluguel</td>
                    <td class="text-center">R$500,00</td>
                    <td class="text-center">21/02</td>
                    <td class="flex justify-center gap-2 py-6">
                        <button class="h-8 w-8 rounded bg-[#2E4399] text-white">👁</button>
                        <button class="h-8 w-8 rounded bg-[#2E4399] text-white">✏️</button>
                        <button class="h-8 w-8 rounded bg-red-500 text-white">🗑</button>
                    </td class="text-center">
                    <td class="text-center">Pago</td>
                </tr>
            </tbody>
        </table>
    </div>

<div>