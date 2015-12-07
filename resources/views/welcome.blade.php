<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="[Hello World amb estil]">
    <meta charset="utf-8">
    <link href="{{ asset('css/all.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css')  }}" rel="stylesheet" type="text/css">
    <title>Vue</title>
</head>
<body>

<alert type="error">
<strong>Error</strong> Your account has not been updated.
</alert>

<template id="alert-template" >

    <div :class="alertClasses" v-show="show">

        <slot></slot>

        <span class="Alert__close" @click="show=false">x</span>

    </div>

</template>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/vue.js') }}"></script>
</body>
</html>