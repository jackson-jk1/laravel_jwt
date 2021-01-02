<template>
  <div class="row">
    <div class="content-header">
      <h1>Contas bancárias <small>Gerenciamento de contas</small></h1>
      <div class="grey-text">
        <small>
          <a href="#/">iFinance</a> >
          <span>Suas conta</span>
        </small>
      </div>
    </div>

    <div class="card col s12">

      <div class="card-content">
        <table class="highlight">
          <thead>
          <tr>
            <th>contas</th>
          </tr>
          </thead>
          <tbody>
          <tr @click="goTo(1)">
            <td class="valign-wrapper">
              Conte título &nbsp;
              <small>nome/ email</small>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="card-action">
        <a href="#/contas/novo">Nova conta</a>
      </div>
    </div>
  </div>


</template>

<script>
export default {
  name: 'users',
  methods: {
    goTo: function (id){
      this.$router.push('/contas/' + id)
    }
  }
}
</script>

<style>
tbody tr{
  cursor: pointer;
}
</style>
