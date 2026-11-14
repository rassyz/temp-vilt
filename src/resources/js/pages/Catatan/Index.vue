<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { dashboard } from "@/routes";

type Catatan = {
    id: number;
    judul: string;
    isi: string;
    created_at: string;
};

defineProps<{
    catatans: Catatan[];
    total: number;
}>();

defineOptions({
    layout: {
        breadcrumbs: [
            { title: "Dashboard", href: dashboard() },
            { title: "Catatan", href: "/catatan" },
        ],
    },
});
</script>

<template>
    <Head title="Catatan" />

    <div class="flex flex-1 flex-col gap-4 p-4">
        <h1 class="text-xl font-semibold">Catatan ({{ total }})</h1>

        <div class="grid gap-4 md:grid-cols-3">
            <article
                v-for="catatan in catatans"
                :key="catatan.id"
                class="rounded-xl border border-sidebar-border/70 p-4"
            >
                <h2 class="font-medium">{{ catatan.judul }}</h2>
                <p class="mt-2 text-sm text-muted-foreground">
                    {{ catatan.isi }}
                </p>
            </article>
        </div>
    </div>
</template>
