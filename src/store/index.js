import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    slides:{
      width: window.innerWidth,
      height: window.innerHeight,
      slide_one:'nsmall1.jpg',
      slide_two:'nsmall2.jpg',
      desc: 'graphdd.png',
    }
  },
  mutations: {
    modify(state,locale){
      if (locale=='es'){
        if (state.slides.width<958){
          state.slides.slide_two='nsphone2.jpg';
          state.slides.slide_one='nsphone1.jpg';
          state.slides.desc='graphdm.png';
        }
      }
      else if (locale=='en'){
        if (state.slides.width<958){
          state.slides.slide_two='nsphone2.jpg';
          state.slides.slide_one='nsphone1.jpg';
          state.slides.desc='graphdm.png';
        }
      }
    }
  },
  actions: {
  },
  modules: {
  }
})
