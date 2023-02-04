<template>

    <div class="d-flex flex-row align-items-center flex-wrap mt-2">
        <div class="col-md-4">
            <select class="form-select" name="country_id" v-model="country" @change="getState()">
                <option value="">choose country</option>
                <option v-for="data in countries" :value="data.id" :key="data.id">{{ data.name }}</option>
            </select>
        </div>

        <div class="col-md-4">
            <select class="form-select" name="state_id" v-model="state" @change="getCity()">
                <option value="">choose state</option>
                <option v-for="data in states" :value="data.id" :key="data.id">{{ data.name }}</option>
            </select>
        </div>

        <div class="col-md-4">
            <select class="form-select ml-1" name="city_id">
                <option value="">choose city</option>
                <option v-for="data in cities" :value="data.id" :key="data.id">{{ data.name }}</option>

            </select>
        </div>

    </div>

</template>

<script>
export default {
    data() {
        return {
            country: 0,
            countries: [],
            state: 0,
            states: [],
            cities: []
        };
    },
    mounted() {
        this.getCountry();
    },
    methods: {
        getCountry() {
            axios
                .get("/api/country")
                .then(response => {
                    this.countries = response.data;
                })
                
        },
        getState() {
            axios
                .get("/api/state", {
                    params: { country_id: this.country }
                })
                .then(response => {
                    this.states = response.data;
                })
               
        },
        getCity() {
            axios
                .get("/api/city", {
                    params: { state_id: this.state }
                })
                .then(response => {
                    this.cities = response.data;
                })
                
        }
    }
};
</script>