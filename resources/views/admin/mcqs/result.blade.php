<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Result') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                Email           = {{$result->email ?? ''}}
                Correct Answers = {{$result->total_correct_answer ?? ''}}
                Total Answered  = {{$result->total_answered_mcq	?? ''}}
            </div>
        </div>
    </div>
</x-guest-layout>
