<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Curso') }}


        </h2>
    </x-slot>
        <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <h4>{{ __('Dashboard') }}</h4> <h4 style="padding: 5%"> |</h4>
                 </x-nav-link>

                    <x-nav-link :href="route('listCurso')" :active="request()->routeIs('listCurso')">
                    <h4>{{ __('Lista de Curso') }}</h4>
                    </x-nav-link>

                    @if($errors->all())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                    </div>
                                    @endforeach
                            @endif

                    <form action="/salvarCurso" method="post" enctype="multipart/form-data">
                    @csrf
                        Nome do Curso: <input name="nmCurso" required class="form-control form-control-lg require" type="text" placeholder="">
                        Código do Curso: <input name="cdCurso" required class="form-control form-control-lg require" type="number" placeholder="000000">
                        </br><button type="submit" class="btn btn-success">Cadastrar</button>
                        <a href="/impXml" type="submit" class="btn btn-info">Importar XML</a>
                    </form>
                    </br></br>
                    @isset($msg)<div style="background-color: green; color: white" id="msg" class="alert alert-sucess">
                     <h4>{{$msg}}</h4>
                    </div>@endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
