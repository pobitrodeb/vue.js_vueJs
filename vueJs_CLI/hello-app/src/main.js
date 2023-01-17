import { createApp } from "vue";
// import App from "./App.vue";

// createApp(App).mount("#app");
// // console.log("hello app")
// console.log("hello");

var app = createApp({
  data() {
    return {
      message: "This data form mainJs",
    };
  },
  template: `
    <div>
        <h1> {{ message }} </h1>
    </div>
  `,
});

app.mount("#app");
