<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            // 'description' => fake()->randomHtml(),
            'description' => 'Olá! Estamos em busca de um desenvolvedor talentoso para colaborar no desenvolvimento de uma landing page dedicada a promover os serviços do nosso Pet Shop. Somos uma empresa apaixonada por cuidar dos animais, oferecendo serviços de banho e tosa, consultas veterinárias, e uma loja completa com produtos de qualidade para pets.

Sobre o projeto:

Escopo: A landing page terá 10 seções, cobrindo desde a apresentação da empresa até os serviços oferecidos e uma área para agendamento online.
Design: O design completo já está pronto e finalizado no Figma, garantindo uma base sólida para o desenvolvimento.
Objetivo: Criar uma página rápida e responsiva que ajude a converter visitantes em clientes, destacando a confiança e carinho que temos pelos pets.

O que estamos buscando:

Um desenvolvedor competente e comprometido, com experiência em HTML, CSS, JavaScript e preferencialmente em React, que consiga transformar o design em uma landing page otimizada e funcional.
Alguém que tenha um olhar crítico para detalhes e que possa colaborar para garantir a melhor performance e usabilidade. 
Estamos animados para trabalhar com alguém que compartilhe nossa paixão por criar experiências de qualidade!',
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['nodejs', 'react', 'javascript', 'vite', 'nextjs'], random_int(1, 5)),
            'created_by' => User::factory(),

        ];
    }
}
