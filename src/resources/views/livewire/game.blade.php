<div class="w-6/12 rounded-lg border border-gray-300 mx-auto mt-40 p-8">
    @if ($this->status === 'trying')
        <!-- After start -->
        <div class="text-center">
            <span  class="bg-gray-700 text-gray-300 text-lg font-medium px-2.5 py-0.5 rounded">Question {{ $this->questionNumber }}</span>
            <h1 wire:model="words" class="my-4">{{ $currentWord }}</h1>
        </div>
        <!-- // wire:model を使用してコンポーネントのプロパティの値をフォーム入力に簡単にバインドできる -->
        <input wire:model="typingText" type="text" class="w-8/12 mx-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mb-4" autofocus required>
    @elseif ($this->status === 'wating')
        <!-- Before start -->
        <div class="text-center">
            <h1  class="text-2xl font-bold mb-4">My Typing</h1>
            <button wire:click="start" class="bg-red-500 text-white hover:bg-transparent hover:text-red-500 font-bold py-2 px-32 rounded-lg border border-red-500">Start</button>        </div>
    @elseif ($this->status === 'done') 
        <div class="text-center">
            <h1  class="text-2xl font-bold">CLEAR</h1>
        </div>
    @endif 
</div>
</body>
</html>

