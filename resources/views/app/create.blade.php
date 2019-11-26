@extends('master.master')

@section ('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Nieuwe Sportschool</h1>

            <form method="POST" action="/">
            @csrf
                <div class="field">
                    <label class="label" for="name">Sportschool Naam</label>

                    <div class="control">
                        <input class="input @error('name') is-danger @enderror" type="text" name="name" id="name" value="">
                        @error('title')
                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="place">Plaats</label>

                    <div class="control">
                        <input class="input @error('place') is-danger @enderror" type="text" name="place" id="place" value="">
                        @error('place')
                        <p class="help is-danger">{{ $errors->first('place') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="description">Description</label>

                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="description" id="description" ></textarea>
                        @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('description') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="prijs">Prijs</label>

                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" name="price" id="price"></textarea>
                        @error('Prijs')
                        <p class="help is-danger">{{ $errors->first('price') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="imagepath">Foto</label>

                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" name="imagepath" id="imagepath"></textarea>
                        @error('imagepath')
                        <p class="help is-danger">{{ $errors->first('imagepath') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="url">Site</label>

                    <div class="control">
                        <textarea class="textarea @error('url') is-danger @enderror" name="url" id="url"></textarea>
                        @error('url')
                        <p class="help is-danger">{{ $errors->first('url') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="showers">Douches</label>

                    <div class="control">
                        <div class="form-group">
                                <input type='radio' value='1' name='showers'> Ja <br />
                                <input type='radio' value='0' name='showers'> Nee
                        </div>
                        
                        @error('showers')
                        <p class="help is-danger">{{ $errors->first('showers') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection