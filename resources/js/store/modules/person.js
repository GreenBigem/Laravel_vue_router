import router from "../../router";

const state = {
    person: {
        name: null,
        age: null,
        job: null,
    },
    people: null,
}

const getters = {
    person: () => state.person,
    people: () => state.people,
    isDisabled: () => {
        return state.person.name
    },
    
}

const actions = {
    getPerson({state, commit, dispatch}, id) {
        console.log(id);
        axios
        .get(`/api/people/${id}`)
        .then( res => {
            commit('setPerson', res.data.data)
        })
    },

    getPeople({commit}) {
        axios
        .get('/api/people')
        .then ( res => {
            commit('setPeople', res.data.data)
        })
    },

    updatePerson({}, data) {
        axios
        .patch('/api/people/' + data.id, { name: data.name, age: data.age, job: data.job })
        .then( res=> {
            router.push({ name: 'person.show', params: { id: data.id } }) 
        })

    },

    store({}, data){
        axios
        .post('/api/people', { id: data.id, name: data.name, age: data.age, job: data.job })
        .then( res => {
            router.push({ name: 'person.index' })
        })
    },

    deletePerson({dispatch}, id) {
        axios
        .delete('/api/people/' + id)
        .then( res => {
            dispatch('getPeople')
        })
    }
}

const mutations = {
    setPerson (state, person) {
        state.person = person
    },
    setPeople (state, people) {
        state.people = people
    }
}

export default {
    state, mutations, getters, actions
}