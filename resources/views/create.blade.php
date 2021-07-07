@extends('templateUser')
@section("page-content")
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Demande de dessins
        </h2>
    </x-slot>

    @if(Session::has('message'))
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store-draw-request') }}" method="post" class="form-group">
                        @csrf
                        <div class="col-span-6 sm:col-span-3">
                            <label for="titre" class="block text-sm font-medium text-gray-700">Titre du dessin</label>
                            <input type="text" name="titre" id="titre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="idées de dessins"></textarea>
                            </div>
                        </div>
                        {{--<div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                            <div class="container mx-auto">
                                <div class="mb-5">
                                    <label for="datepicker" class="font-bold mb-1 text-gray-700 block">Select Date</label>
                                    <div class="relative">
                                        <input type="hidden" name="date" x-ref="date" :value="datepickerValue" />
                                        <input type="text" x-on:click="initDate(datepickerValue), showDatepicker = !showDatepicker" x-model="datepickerValue"
                                               x-on:keydown.escape="showDatepicker = false"
                                               class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                               placeholder="Select date" />

                                        <div class="absolute top-0 right-0 px-3 py-2">
                                            <svg class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>

                                        <div class="absolute top-0 left-0 p-4 mt-12 bg-white rounded-lg shadow" style="width: 17rem"
                                             x-show.transition="showDatepicker" @click.away="showDatepicker = false">
                                            <div class="flex items-center justify-between mb-2">
                                                <div>
                                                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                    <span x-text="year" class="ml-1 text-lg font-normal text-gray-600"></span>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                            class="inline-flex p-1 transition duration-100 ease-in-out rounded-full cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100"
                                                            @click="if (month == 0) {
                                                    year--;
                                                    month = 12;
                                                } month--; getNoOfDays()">
                                                        <svg class="inline-flex w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                  d="M15 19l-7-7 7-7" />
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="inline-flex p-1 transition duration-100 ease-in-out rounded-full cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100"
                                                            @click="if (month == 11) {
                                                    month = 0;
                                                    year++;
                                                } else {
                                                    month++;
                                                } getNoOfDays()">
                                                        <svg class="inline-flex w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                  d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                <template x-for="(day, index) in DAYS" :key="index">
                                                    <div style="width: 14.26%" class="px-0.5">
                                                        <div x-text="day" class="text-xs font-medium text-center text-gray-800"></div>
                                                    </div>
                                                </template>
                                            </div>

                                            <div class="flex flex-wrap -mx-1">
                                                <template x-for="blankday in blankdays">
                                                    <div style="width: 14.28%" class="p-1 text-sm text-center border border-transparent"></div>
                                                </template>
                                                <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                        <div @click="getDateValue(date)" x-text="date"
                                                             class="text-sm leading-none leading-loose text-center transition duration-100 ease-in-out rounded-full cursor-pointer"
                                                             :class="{
                            'bg-indigo-200': isToday(date) == true,
                            'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                            'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true
                        }"></div>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const MONTH_NAMES = [
                                "Janvier",
                                "Fevrier",
                                "Mars",
                                "Avril",
                                "Mai",
                                "Juin",
                                "Juillet",
                                "Août",
                                "Septembre",
                                "Octobre",
                                "Novembre",
                                "Decembre",
                            ];
                            const MONTH_SHORT_NAMES = [
                                "Jan",
                                "Fev",
                                "Mar",
                                "Avr",
                                "Mai",
                                "Jui",
                                "Jul",
                                "Aou",
                                "Sep",
                                "Oct",
                                "Nov",
                                "Des",
                            ];
                            const DAYS = ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"];

                            function app() {
                                return {
                                    showDatepicker: false,
                                    datepickerValue: "",
                                    selectedDate: "",
                                    dateFormat: "YYYY-MM-DD",
                                    month: "",
                                    year: "",
                                    no_of_days: [],
                                    blankdays: [],
                                    initDate(newDate) {
                                        let today;
                                        if (newDate) {
                                            this.selectedDate = newDate;
                                            console.log(newDate)
                                        }
                                        if (this.selectedDate) {
                                            today = new Date(Date.parse(this.selectedDate));
                                        } else {
                                            today = new Date();
                                        }
                                        this.month = today.getMonth();
                                        this.year = today.getFullYear();
                                        this.datepickerValue = this.formatDateForDisplay(
                                            today
                                        );
                                    },
                                    formatDateForDisplay(date) {
                                        let formattedDay = DAYS[date.getDay()];
                                        let formattedDate = ("0" + date.getDate()).slice(
                                            -2
                                        ); // appends 0 (zero) in single digit date
                                        let formattedMonth = MONTH_NAMES[date.getMonth()];
                                        let formattedMonthShortName =
                                            MONTH_SHORT_NAMES[date.getMonth()];
                                        let formattedMonthInNumber = (
                                            "0" +
                                            (parseInt(date.getMonth()) + 1)
                                        ).slice(-2);
                                        let formattedYear = date.getFullYear();
                                        if (this.dateFormat === "DD-MM-YYYY") {
                                            return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
                                        }
                                        if (this.dateFormat === "YYYY-MM-DD") {
                                            return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
                                        }
                                        if (this.dateFormat === "D d M, Y") {
                                            return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
                                        }
                                        return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
                                    },
                                    isSelectedDate(date) {
                                        const d = new Date(this.year, this.month, date);
                                        return this.datepickerValue ===
                                        this.formatDateForDisplay(d) ?
                                            true :
                                            false;
                                    },
                                    isToday(date) {
                                        const today = new Date();
                                        const d = new Date(this.year, this.month, date);
                                        return today.toDateString() === d.toDateString() ?
                                            true :
                                            false;
                                    },
                                    getDateValue(date) {
                                        let selectedDate = new Date(
                                            this.year,
                                            this.month,
                                            date
                                        );
                                        this.datepickerValue = this.formatDateForDisplay(
                                            selectedDate
                                        );
                                        // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
                                        this.isSelectedDate(date);
                                        this.showDatepicker = false;
                                    },
                                    getNoOfDays() {
                                        let daysInMonth = new Date(
                                            this.year,
                                            this.month + 1,
                                            0
                                        ).getDate();
                                        // find where to start calendar day of week
                                        let dayOfWeek = new Date(
                                            this.year,
                                            this.month
                                        ).getDay();
                                        let blankdaysArray = [];
                                        for (var i = 1; i <= dayOfWeek; i++) {
                                            blankdaysArray.push(i);
                                        }
                                        let daysArray = [];
                                        for (var i = 1; i <= daysInMonth; i++) {
                                            daysArray.push(i);
                                        }
                                        this.blankdays = blankdaysArray;
                                        this.no_of_days = daysArray;
                                    },
                                };
                            }

                        </script>---}}

                                <div class="row">
                        <input type="submit" value="Envoyer" class="">
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
@endsection
