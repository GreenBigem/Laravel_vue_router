<template>
<div class="w-40">
        <div class="mb-3">
            <input type="text" v-model="name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" type="submit" @click.prevent="updatePerson" value="Update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>
import Router from "../../router"
import axios from 'axios'
import router from '../../router'

export default {
    name: "Edit",

    data() {
        return {
        name: null,
        age: null,
        job: null,
        }
    },

    mounted() {
        this.getPerson()
    },

    computed: {
        isDisabled() {
            return this.name;
        }
    },

    methods: {
        getPerson() {
            axios
            .get(`/api/people/${this.$route.params.id}`)
            .then( res => {
                this.name = res.data.data.name
                this.age = res.data.data.age
                this.job = res.data.data.job
            })
        },

        updatePerson() {
            axios
            .patch('/api/people/' + this.$route.params.id, { name: this.name, age: this.age, job: this.job })
            .then( res=> {
                router.push({ name: 'person.show', params: { id: this.$route.params.id } }) 
            })

        }
    }
}
</script>

<style scoped>

</style>
