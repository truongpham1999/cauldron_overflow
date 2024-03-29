<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* question/show.html.twig */
class __TwigTemplate_5b547a73ab101d71e19168300f571218 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Question: ";
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"my-4\">Question</h2>
                <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                    <div class=\"q-container-show p-4\">
                        <div class=\"row\">
                            <div class=\"col-2 text-center\">
                                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\" alt=\"Mallony avatar\">
                            </div>
                            <div class=\"col\">
                                <h1 class=\"q-title-show\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</h1>
                                <div class=\"q-display p-3\">
                                    <i class=\"fa fa-quote-left mr-3\"></i>
                                    <p class=\"d-inline\">I've been turned into a cat, any thoughts on how to turn back? While I'm adorable, I don't really care for cat food.</p>
                                    <p class=\"pt-4\"><strong>--Tisha</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between my-4\">
            <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">(";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 31, $this->source); })())), "html", null, true);
        echo ")</span></h2>
            <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
        </div>



        <ul class=\"list-unstyled\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 39
            echo "                <li class=\"mb-4\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"mr-2 pt-2\">
                            <img src=\"/images/tisha.png\" width=\"50\" height=\"50\">
                        </div>
                        <div class=\"mr-3 pt-2\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
            echo "
                            <p>-- Mallory</p>
                        </div>
                        <div class=\"vote-arrows flex-fill pt-2 js-vote-arrows\" style=\"min-width: 90px;\">
                            <a class=\"vote-up\" href=\"#\" data-direction=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" href=\"#\" data-direction=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            <span>+ <span class=\"js-vote-total\">6</span></span>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/question_show.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  190 => 63,  184 => 61,  174 => 60,  162 => 56,  145 => 45,  137 => 39,  133 => 38,  123 => 31,  106 => 17,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question: {{ question }}{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"my-4\">Question</h2>
                <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                    <div class=\"q-container-show p-4\">
                        <div class=\"row\">
                            <div class=\"col-2 text-center\">
                                <img src=\"{{ asset('images/tisha.png') }}\" width=\"100\" height=\"100\" alt=\"Mallony avatar\">
                            </div>
                            <div class=\"col\">
                                <h1 class=\"q-title-show\">{{ question }}</h1>
                                <div class=\"q-display p-3\">
                                    <i class=\"fa fa-quote-left mr-3\"></i>
                                    <p class=\"d-inline\">I've been turned into a cat, any thoughts on how to turn back? While I'm adorable, I don't really care for cat food.</p>
                                    <p class=\"pt-4\"><strong>--Tisha</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between my-4\">
            <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">({{ answers|length }})</span></h2>
            <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
        </div>



        <ul class=\"list-unstyled\">
            {% for answer in answers %}
                <li class=\"mb-4\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"mr-2 pt-2\">
                            <img src=\"/images/tisha.png\" width=\"50\" height=\"50\">
                        </div>
                        <div class=\"mr-3 pt-2\">
                            {{ answer }}
                            <p>-- Mallory</p>
                        </div>
                        <div class=\"vote-arrows flex-fill pt-2 js-vote-arrows\" style=\"min-width: 90px;\">
                            <a class=\"vote-up\" href=\"#\" data-direction=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" href=\"#\" data-direction=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            <span>+ <span class=\"js-vote-total\">6</span></span>
                        </div>
                    </div>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('js/question_show.js') }}\"></script>
{% endblock %}
", "question/show.html.twig", "C:\\xampp\\htdocs\\cauldron_overflow\\templates\\question\\show.html.twig");
    }
}
