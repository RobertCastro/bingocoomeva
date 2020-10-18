<template>
  <div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      <h6>Jetstram.welcome</h6>
      <div class="mt-8 text-2xl">Welcome {{ $props }}</div>
    </div>

    <div class="container">
      <table class="table-auto">
        <thead>
          <tr>
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2">Cédula</th>
            <th class="px-4 py-2">#Tabla</th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr v-for="item in data" v-bind:key="item.id">
            <td class="border px-4 py-2">{{ item.name }}</td>
            <td class="border px-4 py-2">{{ item.dni }}</td>
            <td class="border px-4 py-2">{{ item.last_table }}</td>
          </tr> -->
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import JetApplicationLogo from "./../Jetstream/ApplicationLogo";

export default {
  props: ["data"],
  components: {
    JetApplicationLogo,
  },
};
</script>
