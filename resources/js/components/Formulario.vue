<template>
<div class="container">
    <form method="POST" action="/imprimir">
        <input type="hidden" name="_token" :value="csrf">
        <div class="mx-auto">
            <h1>Crear</h1>
        </div>
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Ingrese sus nombres">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingrese sus apellidos">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input name="edad" type="number" class="form-control" id="edad" placeholder="Ingrese su edad">
        </div>
        <div class="form-group">
            <label for="profesion">Profesión</label>
            <input name="profesion" type="text" class="form-control" id="profesion" placeholder="Ingrese su profesión">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</template>

<script>
export default {
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
}
</script>

<style>

</style>
