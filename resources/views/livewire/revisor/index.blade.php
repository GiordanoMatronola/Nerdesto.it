<div>
    <table class="table text-center custom-3 my-2">
        <thead>
            <tr>
                <th scope="col">{{__('ui.dateRequest')}}</th>
                <th scope="col">{{__('ui.user')}}</th>
                <th scope="col">{{__('ui.title')}}</th>
            </tr>
        </thead>
        <tbody>
            {{-- mostro gli annunci da revisionare --}}
            @foreach($announcementsToCheck as $announcement)
            <tr class="cursor" wire:click="showAnnouncement({{$announcement->id}})">
                <th scope="row">{{$announcement->created_at->format('d/m/y')}}</th>
                <td>{{$announcement->user->username}}</td>
                <td>{{$announcement->title}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
