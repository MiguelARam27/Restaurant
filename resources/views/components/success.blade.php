@if(!empty($success))
<div id="alert">
    <h2> {{ $success }}</h2>
    <button class=" delete" onclick="hideAlert()"></button>
</div>
@endif

<script>
    function hideAlert() {
        setTimeout(() => {
            document.getElementById("alert").style.display('none')
        }, 2500);
    }

    window.onLoad(hideAlert());

</script>