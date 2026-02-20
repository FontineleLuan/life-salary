<aside class="bg-white w-[20%] min-h-screen text-black p-5">

    <nav class="space-y-4 mt-30">
        <a href="{{ route('dashboard') }}"
           class="block px-3 py-4 rounded text-black text-lg font-sans hover:bg-[#2E4399] hover:text-white hover:scale-105 transition">
            Dashboard
        </a>
        <a href="{{ route('movements.index')}}"
           class="block px-3 py-4 rounded text-black text-lg font-sans hover:bg-[#2E4399] hover:text-white hover:scale-105 transition">
            Movimentação
        </a>
        <a href="{{ route('fixedExpenses.index') }}"
           class="block px-3 py-4 rounded text-black text-lg font-sans hover:bg-[#2E4399] hover:text-white hover:scale-105 transition">
            Despesas Fixas
        </a>
        <a href="{{ route('statement.index')}}"
           class="block px-3 py-4 rounded text-black text-lg font-sans hover:bg-[#2E4399] hover:text-white hover:scale-105 transition">
            Extrato
        </a>
    </nav>

</aside>