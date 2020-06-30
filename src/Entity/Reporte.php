<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReporteRepository")
 */
class Reporte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaInicio;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaFin;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaAsignacion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emisor;

    /**
     * @ORM\Column(type="string", length=18, nullable=true)
     */
    private $ip;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comentario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $oficina;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ubicacion")
     */
    private $ubicacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Area")
     */
    private $area;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Estado")
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Codigo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codigo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(?\DateTimeInterface $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getFechaAsignacion(): ?\DateTimeInterface
    {
        return $this->fechaAsignacion;
    }

    public function setFechaAsignacion(?\DateTimeInterface $fechaAsignacion): self
    {
        $this->fechaAsignacion = $fechaAsignacion;

        return $this;
    }

    public function getEmisor(): ?string
    {
        return $this->emisor;
    }

    public function setEmisor(string $emisor): self
    {
        $this->emisor = $emisor;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(?string $comentario): self
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getOficina(): ?string
    {
        return $this->oficina;
    }

    public function setOficina(string $oficina): self
    {
        $this->oficina = $oficina;

        return $this;
    }

    public function getUbicacion(): ?Ubicacion
    {
        return $this->ubicacion;
    }

    public function setUbicacion(?Ubicacion $ubicacion): self
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getArea(): ?Area
    {
        return $this->area;
    }

    public function setArea(?Area $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getEstado(): ?Estado
    {
        return $this->estado;
    }

    public function setEstado(?Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCodigo(): ?Codigo
    {
        return $this->codigo;
    }

    public function setCodigo(?Codigo $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }
}
