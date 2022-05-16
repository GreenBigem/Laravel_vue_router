<template>
<div class="w-40" v-if="person">
        <div class="mb-3">
            <input type="text" v-model="person.name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="person.age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="person.job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" type="submit" @click.prevent="$store.dispatch('updatePerson', { id: person.id, name: person.name, age: person.age, job: person.job })" value="Update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>
import Router from "../../router"
import axios from 'axios'
import router from '../../router'
import { mapGetters } from 'vuex'

export default {
    name: "Edit",

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    computed: {
        ...mapGetters({
            isDisabled: "isDisabled",
            person: "person",
        })
    },

    methods: {


    }
}
</script>

<style scoped>

</style>
