@push('scripts')
    <script type="text/javascript">
    
        Swal.fire(
        "{{session('info')}}", //<-Asi se imprime un session flass 
        'oprima el boton ok!',
        'success'
        )
       // console.log("{{session('info')}}");
    </script>

@endpush