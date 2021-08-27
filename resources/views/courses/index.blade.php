@extends('layout')

@section('cabecalho')
    Course Test
@endsection

@section('content')

    @auth()
        <a href="{{ route('courses.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    @endauth

    <ul class="list-group">
        @forelse($courses as $course)
            <div class="d-flex">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span id="nome-course-{{ $course->id }}">{{ $course->name }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span id="description-course-{{ $course->id }}">{{ $course->description }}</span>
                </li>
            </div>
            @endforeach
    </ul>

    <script>

        function toggleInput(courseId) {
            const nomeCourseEl = document.getElementById(`nome-course-${courseId}`);
            const inputCourseEl = document.getElementById(`input-nome-course-${courseId}`);
            if (nomeCourseEl.hasAttribute('hidden')) {
                nomeCourseEl.removeAttribute('hidden');
                inputCourseEl.hidden = true;
            } else {
                inputCourseEl.removeAttribute('hidden');
                nomeCourseEl.hidden = true;
            }
        }

        function editarCourse(courseId) {
            let formData = new FormData();
            const nome = document
                .querySelector(`#input-nome-course-${courseId} > input`)
                .value;
            const token = document
                .querySelector(`input[name="_token"]`)
                .value;
            formData.append('nome', nome);
            formData.append('_token', token);
            const url = `/courses/${courseId}/editaNome`;
            //const url = route('editaNome');
            fetch(url, {
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInput(courseId);
                document.getElementById(`nome-course-${courseId}`).textContent = nome;
            });
        }

    </script>
@endsection
