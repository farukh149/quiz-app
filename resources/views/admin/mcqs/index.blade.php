<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Questions') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{route('quiz.store')}}" method="post">
                    <div>
                        <x-input-label for="question" :value="__('Email')" />
                        <x-text-input id="question" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    @csrf
                        @forelse($mcqs as $mcq)
                            <label for="html">{{$mcq->question}}</label><br>
                            <input type="radio" name="{{$mcq->id}}" value="1" >
                            <label for="{{$mcq->id}}">{{$mcq->options->option_1 ?? ''}}</label><br>
                            <input type="radio" name="{{$mcq->id}}" value="2" >
                            <label for="{{$mcq->id}}">{{$mcq->options->option_2 ?? ''}}</label><br>
                            <input type="radio" name="{{$mcq->id}}" value="3" >
                            <label for="{{$mcq->id}}">{{$mcq->options->option_3 ?? ''}}</label><br>
                            <input type="radio" name="{{$mcq->id}}" value="4" >
                            <label for="{{$mcq->id}}">{{$mcq->options->option_4 ?? ''}}</label><br>
                        @empty
                        @endforelse
                        <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
                </form>            
            </div>
        </div>
    </div>
</x-guest-layout>
