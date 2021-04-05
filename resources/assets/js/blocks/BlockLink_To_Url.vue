<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Link Title" :name="fieldName('title')" type="text" :maxlength="30" in-store="value" ></a17-textfield><a17-vselect label="Open Link ..." :name="fieldName('opens')" :options='[{&quot;value&quot;:&quot;SAME&quot;,&quot;label&quot;:&quot;normally&quot;},{&quot;value&quot;:&quot;NEW&quot;,&quot;label&quot;:&quot;In a new window&quot;}]' :selected="{&quot;value&quot;:&quot;SAME&quot;,&quot;label&quot;:&quot;normally&quot;}" :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect><a17-textfield label="Link URL" :name="fieldName('link_url')" type="text" :maxlength="255" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
