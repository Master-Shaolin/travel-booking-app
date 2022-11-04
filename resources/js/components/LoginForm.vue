<template>
  <form>
    <div class="form-group">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <div class="form-group submit-container">
      <button type="submit" class="btn btn-primary">Log in</button>
    </div>
  </form>
</template>
<script>
export default {

}
</script>
<style scoped>
.submit-container {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 0;
}
</style>