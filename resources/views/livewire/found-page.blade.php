<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/foundpage.css') }}">
    <title>Document</title>
    @livewireStyles
</head>
<body>
    @include('navbar')


    <div class="main-container">
        <div class="title">
            <h2>Tell us about what you <span id="found">found</span></h2>
        </div>
    
        <div class="box">
            <form wire:submit.prevent="submit">
                <div class="first-box">
                    <div class="category">
                        <label for="categoryInput">Category</label><br>
                        <input type="text" id="categoryInput" wire:model="category" placeholder="mobile phone">
                        @error('category') <span class="error">{{ $message }}</span> @enderror
                    </div>
    
                    <div class="date">
                        <label for="date">Date</label><br>
                        <input type="date" id="date" wire:model="date">
                        @error('date') <span class="error">{{ $message }}</span> @enderror
                    </div>
            
                    <div class="contactnumber">
                        <label for="contactnumber">Contact Number</label><br>
                        <input type="text" id="contactnumber" wire:model="contactnumber">
                        @error('contactnumber') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="email">
                        <label for="email">Email</label><br>
                        <input type="text" id="email" wire:model="email">
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
    
                    <div class="submit">
                        <button type="submit">Submit</button>
                    </div>
                </div>
    
                <div class="second-box">
                    <div class="description">
                        <label for="description">Description</label><br>
                        <textarea id="description" wire:model="description"></textarea>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>
    
                    <div class="image">
                        <label for="image">Image</label><br>
                        <input type="file" id="image" wire:model="image" accept="image/*">
                        @error('image') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </form>
        </div>
    
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
    @livewireScripts
</body>
</html>