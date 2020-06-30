<?php

/* article_admin/list.html.twig */
class __TwigTemplate_d4b5f9ddabab85bb35ae6533c1d0e12144723b5172b66aa11becee92d10a4741 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("content_base.html.twig", "article_admin/list.html.twig", 1);
        $this->blocks = array(
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "content_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article_admin/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article_admin/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 4
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_new");
        echo "\" class=\"btn btn-primary pull-right\">
        Create <span class=\"fa fa-plus-circle\"></span>
    </a>
    <h1>All Articles</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Published?</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", array()), "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"fa fa-";
            // line 24
            echo ((twig_get_attribute($this->env, $this->source, $context["article"], "isPublished", array())) ? ("check") : ("times"));
            echo "\"></span>
                </td>
                <td>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_edit", array("id" => twig_get_attribute($this->env, $this->source,             // line 28
$context["article"], "id", array()))), "html", null, true);
            // line 29
            echo "\">
                        <span class=\"fa fa-pencil\"></span>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article_admin/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  97 => 29,  95 => 28,  94 => 27,  88 => 24,  83 => 22,  79 => 21,  76 => 20,  72 => 19,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'content_base.html.twig' %}

{% block content_body %}
    <a href=\"{{ path('admin_article_new') }}\" class=\"btn btn-primary pull-right\">
        Create <span class=\"fa fa-plus-circle\"></span>
    </a>
    <h1>All Articles</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Published?</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td>{{ article.title }}</td>
                <td>{{ article.author.email }}</td>
                <td>
                    <span class=\"fa fa-{{ article.isPublished ? 'check' : 'times' }}\"></span>
                </td>
                <td>
                    <a href=\"{{ path('admin_article_edit', {
                        id: article.id
                    }) }}\">
                        <span class=\"fa fa-pencil\"></span>
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "article_admin/list.html.twig", "/var/www/html/ticket/templates/article_admin/list.html.twig");
    }
}
