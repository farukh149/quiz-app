<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
            </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('mcqs.store')}}" method="post">
                    @csrf
                    <div>
                        <x-input-label for="question" :value="__('Title')" />
                        <x-text-input id="question" class="block mt-1 w-full" type="text" name="question" :value="old('question')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="option1" :value="__('Option 1')" />
                        <x-text-input id="option1" class="block mt-1 w-full" type="text" name="option_1" :value="old('option1_1')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="option2" :value="__('Option 2')" />
                        <x-text-input id="option2" class="block mt-1 w-full" type="text" name="option_2" :value="old('option_2')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="option3" :value="__('Option 3')" />
                        <x-text-input id="option3" class="block mt-1 w-full" type="text" name="option_3" :value="old('option_3')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="option4" :value="__('Option 4')" />
                        <x-text-input id="option4" class="block mt-1 w-full" type="text" name="option_4" :value="old('option_4')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="right" :value="__('Right Answer')" />
                        <x-text-input id="right" class="block mt-1 w-full" type="text" name="correct_answer_no" :value="old('correct_answer_no')" required autofocus />
                    </div>
                    
                    <x-primary-button class="ml-3">
                {{ __('Create') }}
            </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
