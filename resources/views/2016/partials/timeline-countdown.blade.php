<ul id="countdown" v-if="__isCurrentCountdownEvent(item)">
    <li>
        <span class="days time-font">@{{ days }}</span>
        <p>dias </p>
    </li>
    <li>
        <span class="hours time-font">@{{ hours }}</span>
        <p class="">horas </p>
    </li>
    <li>
        <span class="minutes time-font">@{{ minutes }}</span>
        <p class="">minutos</p>
    </li>
    <li>
        <span class="seconds time-font">@{{ seconds }}</span>
        <p class="">segundos</p>
    </li>
</ul>
