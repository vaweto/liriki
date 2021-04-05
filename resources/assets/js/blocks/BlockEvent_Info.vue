<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-datepicker label="Event date" :name="fieldName('event_date')" place-holder="Event date" enable-time min-date="2017-09-10 12:00" max-date="2030-12-10 12:00" in-store="date"
></a17-datepicker>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
