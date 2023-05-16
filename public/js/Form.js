export default {
  template: `
    <div>
      <h2>Форма</h2>
      <form @submit.prevent="submitForm">
        <div>
          <label>Имя:<br>
          <input type="text" id="name" v-model="formData.name" required></label>
        </div>
        <br>
        <div>
          <label>Обращение:<br>
          <textarea id="text" v-model="formData.text" required></textarea></label>
        </div>
        <button type="submit">Отправить</button>
      </form>
    </div>
  `,
  data() {
    return {
      formData: {
        name: '',
        text: '',
      }
    };
  },
    created() {

    this.csrfToken = document.querySelector('meta[name="csrf-token"]').content;
  },
  methods: {
    submitForm() {
      const formDataCopy = { ...this.formData };
       axios.post('/saveFormData', formDataCopy, {
        headers: {
          'X-CSRF-TOKEN': this.csrfToken,
        },
    })
        .then(response => {
          console.log(response.data);
        })
        .catch(error => {
          console.error(error);
        });
      this.$store.dispatch('saveFormData', formDataCopy);
      this.formData.name = '';
      this.formData.text = '';
    }
  }
};










