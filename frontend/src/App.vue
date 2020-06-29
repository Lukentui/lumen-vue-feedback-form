<template>
  <div id="app">
    <div class="main-page-wrapper">
      <div class="feedback-form">
        <h1 class="feedback-form--header">Обратная связь</h1>

        <form @submit.prevent="submit">
          <div class="feedback-form--fields">
            <div class="field-input">
              <input
                type="text"
                placeholder="Иван Иванов"
                v-model="form.name"
              >
            </div>

            <div class="field-input">
              <input
                type="text"
                placeholder="+7 (999) 999-99-99"
                v-mask="'+7 (###) ###-##-##'"
                v-model="form.phone"
              >
            </div>

            <div class="field-textarea">
              <textarea
                rows="6"
                placeholder="Я заказал у вас ноутбук, а вы!.."
                v-model="form.comment"
              ></textarea>
            </div>
          </div>

          <div class="feedback-form--send">
            <div class="filling-progress">{{ readyFieldsNumber }} из 3-х полей...</div>
            <div>
              <button type="submit" :disabled="!isFormReady">Отправить</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { VueMaskDirective } from 'v-mask'

export default {
  name: 'App',
  computed: {
    readyFieldsNumber () {
      let num = 0

      // foreach field in form
      for (const field in this.form) {
        // if field empty do num++
        if (this.form[field] !== '') num++
      }

      return num
    },

    isFormReady () {
      // foreach field in form
      for (const field in this.form) {
        // if field empty return false
        if (this.form[field] === '') return false
      }

      return true
    }
  },
  directives: {
    mask: VueMaskDirective
  },
  data () {
    return {
      form: {
        name: '',
        phone: '',
        comment: ''
      }
    }
  },
  methods: {
    submit () {
      console.warn(this)
    }
  }
}
</script>

<style lang="sass">
$color-black: #252525

.main-page-wrapper
  display: flex
  justify-content: center
  align-items: center
  height: 100vh

.feedback-form
  background: #fff
  box-shadow: 0 20px 60px 0 rgb(156, 186, 197)
  border-radius: 3px
  padding: 1rem

  h1.feedback-form--header
    font-weight: 900
    font-size: 2rem
    padding: 1rem 1rem
    text-transform: uppercase
    margin: 0
    color: $color-black

  .field-input,.field-textarea
    &
      margin-bottom: 1rem

    textarea
      resize: vertical

    input,textarea
      width: calc(100% - 1rem)
      padding: .5rem
      border: none
      border-bottom: 1px solid #bbb
      font-size: 1rem
      transition: .3s

      &:focus
        outline: none
        border-color: #6E6E6E

  .feedback-form--send
    display: flex
    justify-content: space-between
    align-items: center

    .filling-progress
      color: $color-black
      opacity: .7

    button
      background: $color-black
      border: none
      padding: .5rem 1rem
      color: #fff
      border-radius: 3px
      font-size: 1rem
      cursor: pointer
      transition: .3s

      &:hover
        background: lighten($color-black, 10%)

      &:active
        background: lighten($color-black, 15%)

      &:focus
        outline: none

      &:disabled
        opacity: .6
</style>
