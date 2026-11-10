<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function test_homepage_renders_raven_bringas_portfolio(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertViewIs('home');
        $response->assertSee('RAVEN BRINGAS');
        $response->assertSee('IT STUDENT');
        $response->assertSee('ASPIRING WEB DEVELOPER');
        $response->assertSee('View My Projects');
        $response->assertSee('Contact Me');
    }

    public function test_homepage_renders_every_portfolio_section(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('id="about"', false);
        $response->assertSee('id="education"', false);
        $response->assertSee('id="skills"', false);
        $response->assertSee('id="projects"', false);
        $response->assertSee('id="contact"', false);
        $response->assertSee('Educational Background');
        $response->assertSee('Technical Skills');
        $response->assertSee('Laravel Personal Portfolio');
    }

    public function test_homepage_renders_image_placeholders_when_images_are_missing(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('public/images/profile.jpg');
        $response->assertSee('public/images/about.jpg');
        $response->assertSee('public/images/project-1.jpg');
        $response->assertSee('public/images/project-2.jpg');
        $response->assertSee('public/images/project-3.jpg');
        $response->assertSee('public/images/project-4.jpg');
    }
}
