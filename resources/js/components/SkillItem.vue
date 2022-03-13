<template>
    <div v-for="skill in skills"
        :key="skill">
        <div class="subheading mb-3 font-weight-bold">
            {{ skill.name }}
        </div>
        <ul class="list-inline" :class="{
            'list-inline dev-icons': skill.list_type == 'inline',
            'fa-ul mb-3 small': skill.list_type == 'list'
            }">
            <li class="small m-0" :class="{'list-inline-item': skill.list_type == 'inline',}" v-for="skill_detail in skill.skill_detail" :key="skill_detail.name">
                <span class="fa-li" v-if="skill.list_type == 'list'"><i class="fas fa-check"></i></span>
                <span v-else-if="skill.list_type == 'inline'" class="mx-1">·</span>
                {{skill_detail.name}}
                </li>
        </ul>
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
