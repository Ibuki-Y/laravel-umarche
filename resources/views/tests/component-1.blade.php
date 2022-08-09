<x-tests.app>
  <x-slot name="header">Header</x-slot>
  test1

  <x-tests.card title="Title" content="Content" :message="$message" />
  <x-tests.card title="Props Title" />
  <x-tests.card class="bg-red-300" title="Bag Title" />
</x-tests.app>
