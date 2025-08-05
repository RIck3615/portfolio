
<h2>Mes projets</h2>

@foreach ($projects as $project)
    <div>
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
        @if ($project->link)
            <a href="{{ $project->link }}" target="_blank">Voir le projet</a>
        @endif
    </div>
@endforeach
