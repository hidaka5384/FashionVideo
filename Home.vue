<template>
  <div class="home">
    <img class="fadein" alt="fashion img" src="../assets/fashion_2.jpg" />
    <HelloWorld class="fadein" msg="ようこそ!!FASHION VIDEOへ。" />
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";

export default {
  name: "Home",
  components: {
    HelloWorld,
  },
};

window.addEventListener(
  "DOMContentLoaded",
  function () {
    window.onscroll = function () {
      var myFade = document.getElementsByClassName("fadein");
      for (var i = 0; i < myFade.length; i++) {
        var targetElement = myFade[i].getBoundingClientRect(); //ターゲット要素の高さ
        var scroll =
          document.documentElement.scrollTop || document.body.scrollTop; //スクロール
        var windowHeight = window.innerHeight; //ウィンドウの高さ
        if (scroll > scroll + targetElement.top - windowHeight + 200) {
          myFade[i].style.opacity = "1";
          myFade[i].style.transform = "translateY(0)";
        }
      }
    };
  },
  false
);
</script>

<style scoped lang="scss">
img {
  width: 100%;
  height: 500px;
  object-fit: cover;
  border-radius: 30px;
}

.fadein {
  opacity: 0;
  transform: translateY(20px);
  transition: all 1s;
}
</style>
