<script>
    export default {

        methods: {
        isPageActive(page) {
            return this.currentPage === page;
        }
    }
    }
</script>
<template>
    <ul class="pagination">
        <li class="pagination-item">
            <button
                type="button"
                @click="onClickFirstPage"
                :disabled="isInFirstPage"
            >
                First
            </button>
        </li>

        <li class="pagination-item">
            <button
                type="button"
                @click="onClickPreviousPage"
                :disabled="isInFirstPage"
            >
                Previous
            </button>
        </li>

        <li
            v-for="page in pages"
            class="pagination-item"
        >
            <button
                type="button"
                @click="onClickPage(page.name)"
                :disabled="page.isDisabled"
                :class="{ active: isPageActive(page.name) }"
            >
                {{ page.name }}
            </button>
        </li>

        <li class="pagination-item">
            <button
                type="button"
                @click="onClickNextPage"
                :disabled="isInLastPage"
            >
                Next
            </button>
        </li>

        <li class="pagination-item">
            <button
                type="button"
                @click="onClickLastPage"
                :disabled="isInLastPage"
            >
                Last
            </button>
        </li>
    </ul>
</template>

<style>
    .pagination {
        list-style-type: none;
    }

    .pagination-item {
        display: inline-block;
    }

    .active {
        background-color: #4AAE9B;
        color: #ffffff;
    }
</style>
