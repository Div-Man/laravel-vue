<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://unpkg.com/vue@2/dist/vue.js"></script>
  <script src="https://unpkg.com/vue-router@3/dist/vue-router.js"></script>
  <script src="https://unpkg.com/vuex@3/dist/vuex.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 </head>
 <body>

<div id="app">
  <p>
    <router-link to="/">Главная</router-link>
    <router-link to="/form">Создать обращение</router-link>
    <router-link to="/list">Список обращений</router-link>
  </p>
  <!-- Отображаем компонент для соответствующего маршрута -->
  <router-view></router-view>


</div>

<script  type="module">

import Form from '{{ asset('/js/Form.js') }}';
import store from '{{ asset('/js/store.js') }}';

  const Main = {
    template: '<div>Главная страница сайта</div>'
  }

const List = {
  template: `
    <div>
      <h2>Список обращений:</h2>
      <ul>
        <li v-for="data in $store.getters.formData" :key="data.id">
          <p>Имя: @{{ data.name }}</p>
          <p>Обращение: @{{ data.text }}</p>
        </li>
      </ul>
    </div>
  `
};

  const routes = [
    { path: '/', component: Main },
    { path: '/form', component: Form },
    { path: '/list', component: List },
  ];



  const router = new VueRouter({
    mode: 'history',
    routes
  });

  new Vue({
    el: '#app',
    store,
    router,
    created() {
      this.$store.dispatch('loadFormData');
    }
  });
</script>
</body>
</html>
