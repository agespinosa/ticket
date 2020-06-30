<?php

/* article_admin/_form.html.twig */
class __TwigTemplate_d04439423234ac38309dd0efdc0aad00d6dd26cf531cfa0cb75bbc167839d9db extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article_admin/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article_admin/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new Twig_Error_Runtime('Variable "articleForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new Twig_Error_Runtime('Variable "articleForm" does not exist.', 3, $this->source); })()), "title", array()), 'row', array("label" => "Article title"));
        // line 5
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new Twig_Error_Runtime('Variable "articleForm" does not exist.', 6, $this->source); })()), "author", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new Twig_Error_Runtime('Variable "articleForm" does not exist.', 7, $this->source); })()), "content", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new Twig_Error_Runtime('Variable "articleForm" does not exist.', 8, $this->source); })()), "publishedAt", array()), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["button_text"]) || array_key_exists("button_text", $context) ? $context["button_text"] : (function () { throw new Twig_Error_Runtime('Variable "button_text" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</button>

";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new Twig_Error_Runtime('Variable "articleForm" does not exist.', 12, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article_admin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  52 => 10,  47 => 8,  43 => 7,  39 => 6,  36 => 5,  34 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(articleForm) }}

    {{ form_row(articleForm.title, {
        'label': 'Article title'
    }) }}
    {{ form_row(articleForm.author) }}
    {{ form_row(articleForm.content) }}
    {{ form_row(articleForm.publishedAt) }}

<button type=\"submit\" class=\"btn btn-primary\">{{ button_text }}</button>

{{ form_end(articleForm) }}", "article_admin/_form.html.twig", "/var/www/html/ticket/templates/article_admin/_form.html.twig");
    }
}
