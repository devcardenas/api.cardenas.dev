<template>
    <div v-for="skill in skills"
        :key="skill" class="col-md-4">
        <div class="item mb-5">
            <div class="subheading mb-3 font-weight-bold text-secondary">
            {{ skill.name }}
        </div>
        <ul class="list-inline" :class="{
            'list-inline dev-icons': skill.list_type == 'inline',
            'fa-ul small': skill.list_type == 'list'
            }">
            <li class="small m-0" :class="{'list-inline-item': skill.list_type == 'inline',}" v-for="skill_detail in skill.skill_detail" :key="skill_detail.name">
                <span class="fa-li" v-if="skill.list_type == 'list'"><i class="fas fa-check"></i></span>
                <span v-else-if="skill.list_type == 'inline'" class="mx-1">·</span>
                {{skill_detail.name}}
                </li>
        </ul>
        </div>
    </div>
</template>

<script>
import moment from "moment";
moment.locale("es");

export default {
    props: ["skills"],
    methods: {
        formatDate(date) {
            return moment(date).format("YYYY");
        },
    },
};
</script>
