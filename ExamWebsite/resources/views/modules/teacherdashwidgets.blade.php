@section('teachingGroups')
@foreach($teachingGroups->getGroups() as $teachingGroup)

<div class="px-3 py-2 m-2 rounded border item-box group-item-box" data-teachingGroup-id="{{$teachingGroup["ID"]}}">
<span class="fs-6">{{$teachingGroup["GroupName"]}}</span>
<span style="float: right;"><span class="fs-6 text-primary fw-light">{{count($teachingGroups->getStudents($teachingGroup["ID"]))}}</span> students</span>
</div>

<div class="modal fade text-dark" id="teachingGroupModal" tabindex="-1" aria-hidden="true" data-teachingGroup-id="{{$teachingGroup["ID"]}}">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="teachingGroupTitle">Manage Students</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column">
        <div class="list-group">
          @foreach($teachingGroups->getStudents($teachingGroup["ID"]) as $student)
            <a href="#" class="list-group-item list-group-item-action">{{$student["StudentName"]}}</a>
          @endforeach
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endforeach

@if(!count($teachingGroups->getGroups()))

<div class="px-3 py-2 m-2 rounded border">
  <span class="fs-4">Your class leaderboard is empty!</span>
</div>

@endif



@endsection
