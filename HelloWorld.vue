<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      このサイトはあなたの好みに合ったファッション動画を閲覧することが出来ます。<br />
      また、あなた好みの服を選んでくれます。
    </p>
    <router-link to="/video">検索ページへ</router-link> |
    <router-link to="/detail">Yahoo!検索ページへ</router-link>
    <h3>~あなたに合う素晴らしいアイテムが見つかりますように~</h3>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #ff4f02;
}
</style>
